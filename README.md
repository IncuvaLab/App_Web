Manual Técnico

1. Introducción:

La aplicación web "Incuvalab" se presenta como una herramienta innovadora y altamente funcional para mejorar la experiencia educativa en la Incubadora de Negocios. Diseñada para facilitar la enseñanza y el aprendizaje, Incubalab permite a los maestros ejercer un control más eficiente y organizado sobre el progreso de sus estudiantes. La estructura de la aplicación se basa en etapas de avance, las cuales los estudiantes navegan a través del llenado de formularios.

2. Descripción del proyecto:

Incuvalab es un proyecto diseñado para revolucionar la experiencia de enseñanza y aprendizaje en la Incubadora de Negocios. Su propósito principal es proporcionar una plataforma web intuitiva y robusta que permita a los maestros gestionar de manera eficiente el progreso académico y práctico de sus estudiantes.

Funcionalidades y Estructura:

· Etapas de Avance Educativo:

La aplicación se estructura en etapas progresivas, donde los estudiantes avanzan completando y enviando formularios específicos.

Los maestros evalúan estos formularios, decidiendo si los estudiantes están preparados para avanzar a la siguiente etapa.

· Herramientas de Gestión para Maestros:

Un calendario integrado permite a los maestros asignar y controlar las fechas límite para la entrega de formularios.

Los maestros pueden programar citas y seguimientos personalizados con los estudiantes.

· Funcionalidades Principales:

Login y Registro: Seguridad y personalización a través de un sistema de login para estudiantes y maestros.

Registro de Usuarios y Grupos de Trabajo: Facilidad para añadir nuevos estudiantes y maestros, y crear grupos de trabajo colaborativos.

Llenado y Aprobación de Formularios: Interfaz interactiva para el llenado de formularios y un sistema de aprobación para el seguimiento del progreso de los estudiantes.

Impacto Esperado: El proyecto Incubalab busca ofrecer una solución integral que no solo mejore la eficiencia en la gestión educativa, sino que también enriquezca la experiencia de aprendizaje de los estudiantes. Al facilitar la interacción y el seguimiento personalizado, Incubalab se posiciona como una herramienta clave en el desarrollo de habilidades y conocimientos dentro de la Incubadora de Negocios, preparando a los estudiantes para los desafíos del mundo empresarial actual.

3. Roles / integrantes

Team Leader: Fernando Jimenez Mamani

Git Master: Erick Alanes Zambrana

SQA: Issac Mamani Oxa

4. Arquitectura del software:

Es una aplicación web realizada en laravel php, se trabajo con la base de datos MySql y se uso el patron de diseño MVC

5. Requisitos del sistema:

· Requerimientos de Hardware (mínimo): (cliente)

· Requerimientos de Software: (cliente)

· Requerimientos de Hardware (server/ hosting/BD)

· Requerimientos de Software (server/ hosting/BD)

6. Instalación y configuración:

® Descargar el proyecto del GitHub

® Tener instalado VS Code, laravel, php y mysql workbench

® Abrir el proyecto en VS code

® Crearse una base de datos en Mysql

CREATE DATABASE incubalab;

® Entrar al archivo .env y poner el nombre de la base de datos en DB_DATABASE
Ahora vamos a crearnos una nueva terminal y vamos a ejecutar los siguientes comandos:

composer install

php artisan key:generate

php artisan migrate

® Con esto ya tenemos las migraciones Ahora iremos a Mysql y nos crearemos un admin para poder loguearnos en la app web

INSERT INTO incubalab1.users (firstname, lastname,secondLastName, email, password, userType)

VALUES ('Admin', 'Incubalab', '2023', 'admin@abc.com', '$2y$10$noUWW1zdkKKpsu6r2RzfQ.qU27VExDiGt1qNrZSOB1NfDNvrFNgKq', 'admin');

Correo: admin@abc.com

Password: 123456789

® Ahora vamos a hacer correr la app, para esto necesitamos 3 comandos

o Para hacer correr el proyecto

php artisan serve

o Para hacer correr el vite

npm run dev

o Para poder enviar correos

php artisan queue:work --queue=high,default

Cada uno de estos comando se deberan hacer correr en una terminal diferente

7. PROCEDIMIENTO DE HOSTEADO / HOSTING (configuración)

Se creo una imagen end docker de la app y de la base de datos

8. GIT :

· Versión final entregada del proyecto.

· Entrega compilados ejecutables

Repositorio git https://github.com/IncuvaLab/App_Web.git

9. Personalización y configuración: Información sobre cómo personalizar y configurar el software según las necesidades del usuario, incluyendo opciones de configuración, parámetros y variables.

9.1. Configuración general

· Roles de usuario

Se tienen los siguientes roles

Administrador, docente y estudiante.

9.2. Parámetros y variables

· Parámetros del sistema:

9.2..1. Correo electrónico: notificación y correo electrónico por incuvalabunivalle@hotmail.com

9.2..2. Duración de sesión por 30 minutos.

9.3. Personalización

· Configuración de roles:

Ingresar como administrador, agregar nuevo docente ingresar como docente, agregar nuevos estudiantes.

9.4. Soporte técnico · Contacta con nuestro soporte técnico “isacmamani10@gmail.com”

10. Seguridad: Consideraciones de seguridad y recomendaciones para proteger el software y los datos, incluyendo permisos de acceso, autenticación y prácticas de seguridad recomendadas.

10.1. Permisos de acceso:

· Roles y permisos:

Se tiene como principal tres roles.

· Administrador, se encarga de gestionar a los docentes.

· Docente, es el que gestiona tanto los equipos y estudiantes.

· Estudiante, pertenece a un equipo o emprendimiento, llena formularios para la aprobación de un docente.

10.2. Autenticación y manejo de contraseña

· Envió de contraseña autogenerada por correo.

· Contraseña mínima de 8 caracteres al cambiar.

· Recuperación de contraseña por correo electrónico.

10.3. Prácticas de seguridad recomendadas

· Seguridad en la Comunicación:

· Uso de conexiones seguras mediante HTTPS.

· Configuración de cifrado de datos en reposo y en tránsito.

· Auditorías de Seguridad:

· Mantenimiento regular del software para corregir vulnerabilidades conocidas.

11. Depuración y solución de problemas: Instrucciones sobre cómo identificar y solucionar problemas comunes, mensajes de error y posibles conflictos con otros sistemas o componentes.

11.1. Identificación de problemas

· Mensajes de error,

· Caída del sistema.

11.2. Solución de problemas

· Reiniciar la página.

12. Glosario de términos: Un glosario que incluya definiciones de términos técnicos y conceptos utilizados en el manual.

12.1. Términos técnicos

· Autenticación Definición de los procesos de verificación de identidad del usuario.

· https Descripción del protocolo seguro para la transferencia de datos en la web.

13. Referencias y recursos adicionales: Enlaces o referencias a otros recursos útiles, como documentación técnica relacionada, tutoriales o foros de soporte.

14. Herramientas de Implementación:

· Lenguajes de programación:

o Python empleado para el backend.

o Php empleado con laravel para funciones del servidor.

· Frameworks:

o Laravel empleado para funciones del servidor

-----------------------------------------------------------------------------------------------------------

Video - Incuvalab
https://youtu.be/N3-_8Bw1OvQ
