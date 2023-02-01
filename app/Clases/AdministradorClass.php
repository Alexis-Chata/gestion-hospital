<?php

namespace App\Clases;

use App\Models\Asignacion;
use App\Models\Examen;
use App\Models\Medico;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Mail;

class AdministradorClass extends UsuarioClass
{
    public function __construct()
    {
        //
    }

    /**
     * Guarda usuario le asigna roles y guarda datos del medico
     *
     * @param User $user
     * @param array $rolesXasignar
     * @param Medico $medico
     * @param $password
     * @return list
     */
    public static function usuario_asignar_roles_datos_medico(User $user, array $rolesXasignar, array $tipoUsuario, Medico $medico, $password = null)
    {
        $user = (new static)::guardar_usuario($user, $password);
        (new static)::asignar_tipo_usuario($user, $tipoUsuario);
        $user = (new static)::asignar_roles($user, $rolesXasignar);
        $medico = (new static)::guardar_datos_medico($medico, $user->id);
        return [$user, $medico];
    }

    /**
     * Crea un usuario
     *
     * @param User $user
     * @param $password
     * @return User $user
     */
    public static function guardar_usuario(User $user, $password = null)
    {
        if (!isset($user->id)) {
            $user->password = $password;
        }
        $user->save();
        return $user;
    }

    /**
     ** todos los tipos de usuario actuales se eliminaran del usuario y se reemplazaran por la matriz dada ($tipo_usuarios)
     *
     * @param User $user
     * @param array $tipo_usuarios
     * @param array $asignar_tipoUsuario
     * @return collection Asignacions
     */
    public static function asignar_tipo_usuario(User $user, array $tipo_usuarios, array $asignar_tipoUsuario = [])
    {
        foreach ($tipo_usuarios as $tipo_usuario) {
            array_push($asignar_tipoUsuario, ['user_id' => $user->id, 'tipo_usuario_id' => $tipo_usuario]);
        }
        $user->asignaciones()->delete();
        return $user->asignaciones()->createMany($asignar_tipoUsuario);
    }

    /**
     * Obtener todos los Tipo Usuario del Usuario dado
     *
     * @param User $user
     * @param array $tipoUsuario
     * @return array
     */
    public static function tipo_usuario(User $user, array $tipoUsuario = [])
    {
        foreach ($user->asignaciones as $asignacione) {
            array_push($tipoUsuario, $asignacione->tipo_usuario_id);
        }
        return $tipoUsuario;
    }

    /**
     * Crea datos de medico
     *
     * @param Medico $medico
     * @param $user_id
     * @return Medico $medico
     */
    public static function guardar_datos_medico(Medico $medico, $user_id = null)
    {
        $datos = 0;
        foreach ($medico->toArray() as $key => $value) {
            if (isset($value) && trim($value) != "") {
                $datos++;
            }
        }
        if ($datos) {
            if (!isset($medico->id)) {
                $medico->user_id = $user_id;
            }
            $medico->save();
        }
        return $medico;
    }

    /**
     * Elimina usuario cambiando su estado a inactivo
     *
     * @param User $user
     * @return String $mensaje
     */
    public static function eliminar_usuario(User $user)
    {
        if ($user->examens->count() == 0) {
            $user->estado = 0;
            $user->save();
            $mensaje = "Se elimino el usuario correctamente.";
        } else {
            $mensaje = "No se pudo eliminar al usuario tiene examenes asignados";
        }
        return $mensaje;
    }

    /**
     ** todos los roles actuales se eliminaran del usuario y se reemplazaran por la matriz dada
     *
     * @param User $user
     * @param array $rolesXasignar
     * @return User $user
     */
    public static function asignar_roles(User $user, array $rolesXasignar)
    {

        $user->syncRoles($rolesXasignar);

        if ($user->id == 1) {
            $user->assignRole('Administrador');
        }

        return $user;
    }

    /**
     ** todos los permisos actuales se eliminaran del usuario y se reemplazaran por la matriz dada
     *
     * @param User $user
     * @param array $permisosXasignar
     * @return User $user
     */
    public static function asignar_permisos(User $user, array $permisosXasignar)
    {

        $user->syncPermissions($permisosXasignar);
        if ($user->id == 1) {
            $user->givePermissionTo('admin.administrador.index');
        }

        return $user;
    }

    /**
     * Reinicia la contraseña actual por 123456789
     *
     * @param User $user
     * @return void
     */
    public static function reiniciar_password(User $user)
    {
        $user->password = '123456789';
        $user->save();
    }
}
