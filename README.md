# Web del departamento

- [x] Hacer lista de todos
- [ ] Terminar el proyecto
- [ ] Hacerme con todos

# Lista de cosas para que el proyecto tire

Hay que montar Vagrant con Homestead y configurarlo para que monte la carpeta donde clonamos el repositorio. Esto lo dimos en clase, si quereis instrucciones las poneis vosotros.

- La primera vez:
    - `git clone https://github.com/fjrb44/departamentoInformatica.git ~/code`
    - Iniciar la máquina Homestead con Vagrant
    - `ssh vagrant@192.168.10.10`
    - `cd ~/code`
    - `composer install`
    - `npm install` - Aun no hace falta, no usamos JS

- Después:
    - Iniciar la máquina Homestead con Vagrant
    - `ssh vagrant@192.168.10.10`
    - `cd ~/code`
    - `git pull` - Supongo...

# Para ver los datos en la BD

Hay que bajar un gestor de bases de datos compatible con SQLite y abrir el archivo ./database/db.sqlite.

- [SQLiteStudio](https://sqlitestudio.pl/index.rvt) no require instalación y es multiplataforma.
- [DBeaver](https://dbeaver.io/) es mas completo pero más complejo
- Te buscas la vida. Realmente no vamos a necesitar ver la BD casi nunca. Podeis usar `php artisan tinker` o algo para pruebas simples.
