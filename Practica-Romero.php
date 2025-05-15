<?php
/**
 * Clase para gestionar una lista de contactos.
 *
 * Esta clase permite agregar contactos a una lista y mostrarlos.
 *
 * @author Elena Romero Martínez
 * @version 1.1
 */

namespace Aplicacion;

/**
 * Clase GestorContactos.
 *
 * Gestiona el almacenamiento y visualización de contactos.
 */
class GestorContactos
{
    /**
     * Lista de contactos.
     *
     * @var array
     */
    private array $contactos = [];

    /**
     * Agrega un contacto a la lista.
     *
     * @param string $nombre El nombre del contacto.
     * @param string $telefono El número de teléfono del contacto.
     * @param string $email El correo electrónico del contacto.
     * @return string Mensaje de confirmación.
     *
     * @internal Esta función asume que los parámetros ya han sido validados.
     */
    public function agregarContacto(string $nombre, string $telefono, string $email): string
    {
        $this->contactos[] = [
            'nombre' => $nombre,
            'telefono' => $telefono,
            'email' => $email
        ];

        return "<strong>Contacto agregado:</strong><br>Nombre: $nombre<br>Teléfono: $telefono<br>Email: $email<br><br>";
    }

    /**
     * Muestra todos los contactos almacenados.
     *
     * @return string Lista de contactos formateada.
     *
     * @internal No realiza validación sobre la lista de contactos.
     */
    public function mostrarContactos(): string
    {
        if (empty($this->contactos)) {
            return "No hay contactos registrados.<br>";
        }

        $lista = "";
        foreach ($this->contactos as $contacto) {
            $lista .= "Nombre: " . $contacto['nombre'] . "<br>" .
                      "Teléfono: " . $contacto['telefono'] . "<br>" .
                      "Email: " . $contacto['email'] . "<br><br>";
        }
        return $lista;
    }
}

// ---------- Uso de la clase ----------
// Cambio realizado para demostrar que git funciona con el proyecto

$gestor = new GestorContactos();
echo $gestor->agregarContacto("Carlos González", "953-210-085", "carlgon@mail.com");
echo $gestor->agregarContacto("María Josefa Hortelano", "957-161-185", "mjhortelano@mail.com");

echo "<strong>Lista de contactos registrados:</strong><br>";
echo $gestor->mostrarContactos();