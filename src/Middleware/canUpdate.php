<?php

    namespace Pledge\Install\Middleware;

    use Closure;
    use Pledge\Install\Helpers\MigrationsHelper;
    use Pledge\Install\Middleware\canInstall;

    class canUpdate
    {
        use MigrationsHelper;


        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            $canInstall = new canInstall;

            // if the application has not been installed,
            // redirect to the install
            if (!$canInstall->alreadyInstalled()) {
                return redirect()->route('Install::welcome');
            }

            if($this->alreadyUpdated()) {
                abort(404);
            }

            return $next($request);
        }

        /**
         * If application is already updated.
         *
         * @return bool
         */
        public function alreadyUpdated()
        {
            $migrations = $this->getMigrations();
            $dbMigrations = $this->getExecutedMigrations();

            // If the count of migrations and dbMigrations is equal,
            // then the update as already been updated.
            if (count($migrations) == count($dbMigrations)) {
                return true;
            }

            // Continue, the app needs an update
            return false;
        }


    }
