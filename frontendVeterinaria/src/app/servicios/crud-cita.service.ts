import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Cita } from './Cita';

@Injectable({
  providedIn: 'root'
})
export class CrudCitaService {

  API: string = 'http://localhost/backendVeterinaria/data/cita.php';

  constructor (private clienteHttp : HttpClient) { }

  agregarCita(datosCita:Cita) : Observable <any> {

    return this.clienteHttp.post(this.API + "?insertar=1", datosCita);
  }

  obtenerCitas() {
    return this.clienteHttp.get(this.API);
  }

  borrarCita(id:any) : Observable <any> {
    return this.clienteHttp.get(this.API + "?borrar=" + id);
  }

  obtenerCita(id:any) : Observable <any> {
    return this.clienteHttp.get(this.API + "?consultar=" + id);
  }

  actualizarCita(datosCita:Cita, id:any) : Observable <any> {

    return this.clienteHttp.post(this.API + "?actualizar=" + id, datosCita);
  }
}