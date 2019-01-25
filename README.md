# Web del departamento

- [x] Hacer lista de todos
- [ ] Terminar el proyecto
- [ ] Hacerme con todos

# Lista de cosas para que el proyecto tire

- `git clone https://github.com/fjrb44/departamentoInformatica.git ~/code`
- `cd ~/code`
- `npm install`
- `composer install`
- Iniciar la máquina Homestead con Vagrant

- Para crear la base de datos:
    - `ssh vagrant@192.168.10.10`
    - `cd ~/code`
    - `php artisan migrate` - Crea las tablas
    - `php artisan db:seed` - Rellena las tablas
