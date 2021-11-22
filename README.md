# Proyecto-TPI

<h1 align="center"> Netfilm 🎬</h1>
  
<p align="center">
  <img width="200" src="https://www.linkpicture.com/q/netfilm-150.png" alt="logo">
</p>

  
## Descripción
  
Netfilm es un sitio web donde puedes ver o rentar películas online desde la comodidad de tu casa.
  
Website: https://netfilm-ues.herokuapp.com

## Framework
<p align="center">
  <img width="200" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Material Bread logo">
</p>
<p align="center">
    <img alt="Packagist PHP Version Support" src="https://img.shields.io/badge/v-6.20.26-red">
</p>

## Detalles
  
[![All Contributors](https://img.shields.io/badge/all_contributors-5-green.svg?style=flat-square)](#contributors-)
<img alt="Packagist PHP Version Support" src="https://img.shields.io/badge/php-8.0-blue">
<img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/jr-villalta/Proyecto-TPI?style=flat-square">

### Configuraciones

1. Clonar el repositorio en un directorio específico
```sh
  git clone https://github.com/jr-villalta/Proyecto-TPI.git
```
2. Abrir una terminal desde el directorio y ejecutar los siguientes comandos
```sh
  composer update
```
3. Copiar el archivo **.env.example** y pegar el archivo en el mismo directorio.
   Cambiar el nombre del archivo **.env copy.example** a **.env**

   En el Archivo **.env**, **DB_DATABASE** tiene **laravel** por defecto. Cambiar **laravel** por **netfilm**

4. Abrir xampp y crear una base de datos con el nombre de **netfilm**

5. Actualizar la base de datos desde la terminal
```sh
  composer dump-autoload
  php artisan key:generate
  php artisan migrate:fresh --seed
```
Nota: El comando serve nos da acceso directo al servidor web incorporado de PHP
```sh
  php artisan serve 
```

### Librerias
<img alt="" src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
<img alt="" src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white">

### API's

- Flowplayer
- Font Awesome

## Integrantes

| Nombres                                 | Carnet      |
|-----------------------------------------|-------------|
| _*Alejandra Clairé Aguilar Mata*_       | _*AM19089*_ |
| _*Azucena Eleticia Merlos Sandoval*_    | _*MS19038*_ |
| _*Cristian Alexander Guardado Escobar*_ | _*GE19008*_ |
| _*Jorge Eduardo Romero García*_         | _*RG19041*_ |
| _*Junior Mauricio Villalta Flores*_     | _*VF19012*_ |
