## Acerca del proyecto
En una oficina donde varias personas necesitan usar una cuenta de WhatsApp para atender a los clientes mediante WhatsApp Web, se hace tedioso el estar comprobando o avisando de:
- "Hay alguien metido en el WhatsApp"
- "Voy a meterme en el WhatsApp"
- "Tener cuidado y avisarme, que estoy con un cliente."

Esta web es una herramienta en la cual los empleados pueden saber en cada momento si se está usando o no WhatsApp para no sacarse de la sesión los unos a los otros.

**Aunque es importante que la gente colabore, porque este proyecto no se conecta en ningún momento a la API de WhatsApp para tal propósito.**


## Funcionamiento

Instrucciones de uso contando con que todos los empleados tienen la web abierta en el navegador:
- Si alguien va a usar WhatsApp, debe notificarlo en la web pulsando en el único botón disponible.
- Una vez se pulse, la web indicará a los demás que WhatsApp lo está usando una persona.
- Cuando esa persona termine de usarlo, debe de volver a darle al botón para cambiar el estado de WhatsApp a "Disponible".


## Uso de la BD:
- Se hace uso de PDO para el manejo de la BD.
- No existe ningún apartado de "Registrar Usuarios".
- De momento, los usuarios se crean en la tabla "users" de la base de datos en SQLite ubicada en el directorio libs del proyecto. Por lo que se necesita cualquier cliente de BD compatible con SQLite, como DBeaver o SQLite Browser.
