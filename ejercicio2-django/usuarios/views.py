from django.shortcuts import render
from django.http import HttpResponse

def usuario_view(request):
    datos = {
        "nombre": "Laura",
        "apellidos": "Gómez Pérez",
        "dni": "12345678A",
        "email": "laura.gomez@example.com",
        "telefono": "654321987",
        "pagos": {
            "enero": 20,
            "febrero": 20,
            "marzo": 20,
            "abril": 0,
            "mayo": 20,
            "junio": 20,
            "julio": 20,
            "agosto": 0,
            "septiembre": 20,
            "octubre": 20,
            "noviembre": 20,
            "diciembre": 20
        }
    }
    
    total_pagado = sum(datos["pagos"].values())
    
    filas_pagos = ""
    for mes, cantidad in datos["pagos"].items():
        estado = "PAGADO" if cantidad > 0 else "PENDIENTE"
        color_estado = "#4CAF50" if cantidad > 0 else "#f44336"
        filas_pagos += f"""
            <tr>
                <td>{mes.capitalize()}</td>
                <td>{cantidad} €</td>
                <td style="color: {color_estado}; font-weight: bold;">{estado}</td>
            </tr>
        """
    
    meses_pendientes = [mes.capitalize() for mes, cantidad in datos["pagos"].items() if cantidad == 0]
    texto_meses_pendientes = ", ".join(meses_pendientes) if meses_pendientes else "Ninguno"
    
    html = f"""
    <!DOCTYPE html>
    <html>
    <head>
        <title>Datos del Usuario - Asociación</title>
        <style>
            body {{ font-family: Arial, sans-serif; margin: 20px; }}
            h1 {{ color: #333; }}
            h2 {{ color: #555; margin-top: 25px; }}
            table {{ border-collapse: collapse; width: 100%%; margin-top: 15px; }}
            th, td {{ border: 1px solid #ddd; padding: 10px; text-align: left; }}
            th {{ background-color: #f2f2f2; }}
            .resumen {{ background-color: #e8f5e9; padding: 15px; border-radius: 5px; margin-top: 20px; }}
        </style>
    </head>
    <body>
        <h1>Información del Usuario</h1>
        
        <h2>Datos Personales</h2>
        <p><strong>Nombre:</strong> {datos['nombre']}</p>
        <p><strong>Apellidos:</strong> {datos['apellidos']}</p>
        <p><strong>DNI:</strong> {datos['dni']}</p>
        <p><strong>Email:</strong> {datos['email']}</p>
        <p><strong>Teléfono:</strong> {datos['telefono']}</p>
        
        <h2>Pagos de la Asociación</h2>
        <table>
            <thead>
                <tr>
                    <th>Mes</th>
                    <th>Cantidad </th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                {filas_pagos}
            </tbody>
        </table>
        
        <div class="resumen">
            <h3>Resumen Anual</h3>
            <p><strong>Total pagado en el año:</strong> {total_pagado} €</p>
            <p><strong>Meses pendientes:</strong> {texto_meses_pendientes}</p>
        </div>
    </body>
    </html>
    """
    return HttpResponse(html)