# SISGDUPT - Sistema de Gestión de Documentos UPT Bolívar

## Descripción

SISGDUPT es un sistema web desarrollado en PHP y MySQL para la gestión de documentación estudiantil de la Universidad Politécnica del Estado Bolívar (UPT Bolívar). Este sistema permite registrar, buscar, modificar y gestionar información de estudiantes, así como generar documentos académicos en formato PDF.

## Características Principales

- **Autenticación de Usuarios**: Sistema de login y registro con diferentes niveles de acceso (administrador y usuario regular)
- **Gestión de Estudiantes**: Registro completo de información estudiantil incluyendo:
  - Datos personales (cédula, nombres, apellidos, fecha de nacimiento, dirección)
  - Información de contacto (email, teléfono)
  - Información étnica y de discapacidad
  - Programa Nacional de Formación (PNF) y año de estudio
- **Búsqueda Avanzada**: Búsqueda de estudiantes por cédula, nombre o apellido
- **Visualización de Registros**: Tabla interactiva con DataTables para mostrar todos los registros
- **Gestión de Pensum**: Visualización de documentos PDF de pensum de estudio y carga horaria
- **Generación de PDFs**: Generación de documentos académicos como:
  - Certificaciones de notas
  - Constancias de conducta
  - Autenticaciones
- **Respaldo de Base de Datos**: Funcionalidad para respaldar la base de datos (solo administradores)
- **Instalador**: Asistente de instalación paso a paso para configurar el sistema

## Tecnologías Utilizadas

- **Backend**: PHP 7.x+
- **Base de Datos**: MySQL/MariaDB
- **Frontend**: 
  - HTML5
  - CSS3 (Bootstrap, MDB)
  - JavaScript (jQuery)
  - DataTables para tablas interactivas
- **Librerías**:
  - FPDF para generación de PDFs
  - PHPMailer para envío de correos (opcional)
  - Bootstrap 4
  - Material Design for Bootstrap (MDB)

## Requisitos del Sistema

- Servidor web (Apache/Nginx)
- PHP 7.0 o superior
- MySQL 5.7 o superior / MariaDB 10.2 o superior
- Extensiones PHP requeridas:
  - mysqli
  - mbstring
  - gd (para manipulación de imágenes)
  - zip (para respaldos)

## Instalación

1. **Clonar o descargar el repositorio**
   ```bash
   git clone https://github.com/migbertweb/sisgdupt.git
   cd sisgdupt
   ```

2. **Configurar permisos**
   - Dar permisos de escritura a la carpeta `funcs/`

3. **Acceder al instalador**
   - Navegar a `http://tu-dominio/sisgdupt/instalar/`
   - Seguir las instrucciones del asistente de instalación

4. **Configurar la base de datos**
   - El instalador creará automáticamente las tablas necesarias
   - Asegúrate de tener los datos de conexión a MySQL listos

5. **Completar la instalación**
   - El sistema redirigirá automáticamente al login una vez completada la instalación

## Estructura del Proyecto

```
sisgdupt/
├── css/                    # Archivos de estilos
│   ├── bootstrap.css
│   ├── mdb.css
│   ├── style.css
│   └── addons/            # Complementos CSS (DataTables)
├── funcs/                 # Funciones y configuración
│   ├── conexion.php       # Conexión a la base de datos
│   ├── funcs.php          # Funciones auxiliares
│   └── config.php         # Configuración (generado por instalador)
├── fpdf181/              # Librería FPDF para PDFs
├── img/                  # Imágenes y recursos
│   ├── icons/            # Iconos y favicons
│   └── images/           # Imágenes del sistema
├── instalar/             # Asistente de instalación
│   ├── paso0.php
│   ├── paso1.php
│   ├── paso2.php
│   └── sql/              # Scripts SQL
├── js/                   # Archivos JavaScript
│   ├── jquery-3.3.1.min.js
│   ├── bootstrap.bundle.min.js
│   ├── mdb.min.js
│   └── addons/           # Complementos JS
├── respaldobd/           # Scripts de respaldo
├── docs/                 # Documentos PDF (pensum, etc.)
├── index.php             # Página principal
├── login.php             # Página de inicio de sesión
├── registro.php          # Registro de nuevos usuarios
├── nuevo.php             # Formulario de nuevo estudiante
├── guardar.php           # Procesamiento de registro de estudiante
├── buscaralumno.php      # Búsqueda de estudiantes
├── buscar.php            # Procesamiento de búsqueda
├── mostrarregistros.php  # Listado de todos los registros
├── modificar.php         # Edición de registros
├── eliminar.php          # Eliminación de registros
├── pensum.php            # Visualización de pensum
├── head.php              # Encabezado HTML común
├── navbar.php            # Barra de navegación
├── footer.php            # Pie de página
└── README.md             # Este archivo
```

## Uso

### Para Usuarios Regulares

1. **Iniciar Sesión**: Accede con tu usuario y contraseña
2. **Registrar Estudiante**: Usa el menú "Registrar" para agregar nuevos estudiantes
3. **Buscar Estudiante**: Utiliza "Buscar Alumno" para encontrar estudiantes por cédula, nombre o apellido
4. **Ver Registros**: Accede a "Mostrar Registros" para ver todos los estudiantes registrados
5. **Consultar Pensum**: Ve a "Pensum de Estudio" para acceder a los documentos académicos

### Para Administradores

Además de las funciones anteriores, los administradores pueden:
- Ver y gestionar usuarios del sistema
- Respaldar la base de datos
- Modificar y eliminar registros de estudiantes

## Seguridad

- Las contraseñas se almacenan usando `password_hash()` de PHP
- Protección contra inyección SQL mediante prepared statements
- Filtrado anti-XSS en búsquedas
- Validación de sesiones en todas las páginas protegidas
- Escape de caracteres especiales en consultas

## Contribuciones

Este proyecto fue desarrollado como proyecto académico. Las contribuciones son bienvenidas. Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

## Autor

**Migbertweb**

- GitHub: [@migbertweb](https://github.com/migbertweb)

## Agradecimientos

- Proyecto desarrollado para el PNF Informática de la Universidad Politécnica del Estado Bolívar
- Equipo de estudiantes de informática que participó en el desarrollo
- Universidad Politécnica del Estado Bolívar (UPT Bolívar)

## Notas Importantes

- Este sistema fue desarrollado como proyecto de evaluación académica
- Se recomienda realizar pruebas exhaustivas antes de usar en producción
- Mantén siempre respaldos de la base de datos
- Actualiza regularmente las dependencias por seguridad

## Soporte

Para reportar problemas o solicitar funcionalidades, por favor abre un issue en el repositorio de GitHub.

---

**Nota sobre la Licencia**: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener derivados como código libre, especialmente para fines educativos.
