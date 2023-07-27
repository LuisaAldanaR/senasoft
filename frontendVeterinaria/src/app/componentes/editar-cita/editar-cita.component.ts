import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { FormGroup, FormBuilder } from '@angular/forms';
import { CrudCitaService } from 'src/app/servicios/crud-cita.service';

@Component({
  selector: 'app-editar-cita',
  templateUrl: './editar-cita.component.html',
  styleUrls: ['./editar-cita.component.scss']
})
export class EditarCitaComponent implements OnInit {

  formularioDeCitas:FormGroup;
  citas : any;
  elID : any;

  constructor(private formulario : FormBuilder, private activatedRoute : ActivatedRoute, private crudService : CrudCitaService, private ruteador : Router) {
    this.elID = this.activatedRoute.snapshot.paramMap.get('id');

    this.formularioDeCitas = this.formulario.group({
      id:[''], nombreMascota:[''], fecha:[''], hora:[''], motivo:[''],
      nombreDuenio:[''], numeroDuenio:[''], estado:['']
    });

    console.log(this.elID);
    this.crudService.obtenerCita(this.elID).subscribe(

      respuesta => {
        console.log(respuesta);
        this.formularioDeCitas.setValue({
          id:respuesta[0]['id'],
          nombreMascota:respuesta[0]['nombreMascota'],
          fecha:respuesta[0]['fecha'],
          hora:respuesta[0]['hora'],
          motivo:respuesta[0]['motivo'],
          nombreDuenio:respuesta[0]['nombreDuenio'],
          numeroDuenio:respuesta[0]['numeroDuenio'],
          estado:respuesta[0]['estado'],
        });
      }
    );
    
  }

  ngOnInit(): void {
    
  }

  enviarDatos():any {
    console.log(this.elID);
    console.log(this.formularioDeCitas.value);
    this.crudService.actualizarCita(this.formularioDeCitas.value, this.elID).subscribe();
    this.ruteador.navigateByUrl('/listar-cita');
  }
}
