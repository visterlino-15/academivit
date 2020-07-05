<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Permission;
use App\Models\Role;
use App\User;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
    	# LIMPIAR TABLAS
    	DB::statement('SET foreign_key_checks=0');
	    	DB::table('role_user')->truncate();
	    	DB::table('permission_role')->truncate();
	    	Permission::truncate();
	    	Role::truncate();
    	DB::statement('SET foreign_key_checks=1');

    	# USUARIOS
    	$userAdmin = User::where('email','admin@admin.com')->first();

    	if($userAdmin){ 
    		$userAdmin->delete(); 
    	}

        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        # ROLES 
    	$roleAdmin = Role::create([
        	'name'		=> 'Admin',
        	'slug'  	=> 'admin',
        	'description'  	=> 'administrador',
        	'full-access' 	=> 'yes'
        ]);

    	# ASIGNAR ROL A USUARIO 
        $userAdmin->roles()->sync([$roleAdmin->id]);


    	# PERMISOS
    	$permission_all = [] ;

	    	// permisos roles
	    	$permission = Permission::create([
	            'name'          => 'Navegar roles',
	            'slug'          => 'role.index',
	            'description'   => 'Puede listar y navegar roles',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Crear roles',
	            'slug'          => 'role.create',
	            'description'   => 'Puede crear nuevos roles',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Ver detalles de roles',
	            'slug'          => 'role.show',
	            'description'   => 'Puede ver detalles de roles',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Editar roles',
	            'slug'          => 'role.edit',
	            'description'   => 'Puede editar roles',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Eliminar roles',
	            'slug'          => 'role.destroy',
	            'description'   => 'Puede eliminar roles',
	        ]);

	        $permission_all[] = $permission->id ;

	        # permisos usuarios
	    	$permission = Permission::create([
	            'name'          => 'Navegar usuarios',
	            'slug'          => 'user.index',
	            'description'   => 'Puede listar y navegar usuarios',
	        ]);

	        $permission_all[] = $permission->id ;


	        $permission = Permission::create([
	            'name'          => 'Ver detalles de usuarios',
	            'slug'          => 'user.show',
	            'description'   => 'Puede ver detalles de usuarios',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Editar usuarios',
	            'slug'          => 'user.edit',
	            'description'   => 'Puede editar usuarios',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Eliminar usuarios',
	            'slug'          => 'user.destroy',
	            'description'   => 'Puede eliminar usuarios',
	        ]);

	        $permission_all[] = $permission->id ;

	        /*
		        $permission = Permission::create([
		            'name'          => 'Crear usuarios',
		            'slug'          => 'user.create',
		            'description'   => 'Puede crear nuevos usuarios',
		        ]);

		        $permission_all[] = $permission->id ;
	        */

		    $permission = Permission::create([
	            'name'          => 'Ver detalles de su propio usuario',
	            'slug'          => 'userown.show',
	            'description'   => 'Puede ver detalles de su propio usuario',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Editar su propio usuarios',
	            'slug'          => 'userown.edit',
	            'description'   => 'Puede editar su propio usuario',
	        ]);

	        // permisos centros
	    	$permission = Permission::create([
	            'name'          => 'Navegar centros',
	            'slug'          => 'centro.index',
	            'description'   => 'Puede listar y navegar centros',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Crear centros',
	            'slug'          => 'centro.create',
	            'description'   => 'Puede crear nuevos centros',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Ver detalles de centros',
	            'slug'          => 'centro.show',
	            'description'   => 'Puede ver detalles de centros',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Editar centros',
	            'slug'          => 'centro.edit',
	            'description'   => 'Puede editar centros',
	        ]);

	        $permission_all[] = $permission->id ;

	        $permission = Permission::create([
	            'name'          => 'Eliminar centros',
	            'slug'          => 'centro.destroy',
	            'description'   => 'Puede eliminar centros',
	        ]);

	        $permission_all[] = $permission->id ;

        # ASIGNAR PERMISOS A ROLES 
        // $roleAdmin->permissions()->sync( $permission_all );

    }
}
