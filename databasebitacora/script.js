document.addEventListener('DOMContentLoaded', function() {
    const estadoSelect = document.getElementById('estado');
    const empleadosBody = document.getElementById('empleados-body');

    estadoSelect.addEventListener('change', function() {
        const estadoId = this.value;
        if (!estadoId) {
            empleadosBody.innerHTML = '';
            return;
        }

        fetch(`obtener_datos.php?action=getEmployees&estado=${estadoId}`)
            .then(response => response.json())
            .then(data => {
                empleadosBody.innerHTML = data.map(empleado => `
                    <tr>
                        <td>${empleado.id_usuarios}</td>
                        <td>${empleado.nombre}</td>
                        <td>${empleado.apellido}</td>
                        <td>${empleado.ocupacion || 'No especificado'}</td>
                        <td>${empleado.promedio_calificacion || 'Sin evaluaciones'}</td>
                    </tr>
                `).join('');
            })
            .catch(error => {
                console.error('Error:', error);
                empleadosBody.innerHTML = '<tr><td colspan="5">Error al cargar los datos</td></tr>';
            });
    });
});