import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AgregarCitaComponent } from './componentes/agregar-cita/agregar-cita.component';
import { EditarCitaComponent } from './componentes/editar-cita/editar-cita.component';
import { ListarCitaComponent } from './componentes/listar-cita/listar-cita.component';

@NgModule({
  declarations: [
    AppComponent,
    AgregarCitaComponent,
    EditarCitaComponent,
    ListarCitaComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
