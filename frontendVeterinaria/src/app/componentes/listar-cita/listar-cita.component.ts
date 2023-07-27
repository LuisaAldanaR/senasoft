import { Component, OnInit } from '@angular/core';
import { CrudCitaService } from 'src/app/servicios/crud-cita.service';

@Component({
  selector: 'app-listar-cita',
  templateUrl: './listar-cita.component.html',
  styleUrls: ['./listar-cita.component.scss']
})
export class ListarCitaComponent implements OnInit {
  citas : any;
  constructor (private crudService : CrudCitaService) {

  }

  ngOnInit(): void {
    this.crudService.obtenerCitas().subscribe(respuesta => {
      this.citas = respuesta;
      }); 
  }

  borrarCita(id:any, iControl:any) {
    console.log(id);
    console.log(iControl);
    this.crudService.borrarCita(id).subscribe();
    this.citas.splice(iControl, 1);
  }
}