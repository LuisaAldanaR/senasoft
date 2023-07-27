import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder } from '@angular/forms';
import { CrudCitaService } from 'src/app/servicios/crud-cita.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-agregar-cita',
  templateUrl: './agregar-cita.component.html',
  styleUrls: ['./agregar-cita.component.scss']
})
export class AgregarCitaComponent implements OnInit{

  formularioDeCitas:FormGroup;

  constructor(public formulario: FormBuilder, public crudService : CrudCitaService, public ruteador : Router) {
    this.formularioDeCitas = this.formulario.group({
      nombreMascota:[''], fecha:[''], hora:[''], motivo:[''],
      nombreDuenio:[''], numeroDuenio:[''], estado:['']
    });

  }

  ngOnInit(): void {
    
  }

  enviarDatos():any {
    console.log("Clic en agregar");
    console.log(this.formularioDeCitas.value);
    this.crudService.agregarCita(this.formularioDeCitas.value).subscribe();
    this.ruteador.navigateByUrl('/listar-cita');
  }
}
