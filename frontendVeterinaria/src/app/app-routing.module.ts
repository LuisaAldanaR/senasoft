import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AgregarCitaComponent } from './componentes/agregar-cita/agregar-cita.component';
import { EditarCitaComponent } from './componentes/editar-cita/editar-cita.component';
import { ListarCitaComponent } from './componentes/listar-cita/listar-cita.component';

const routes: Routes = [

  {path: '', pathMatch: 'full', redirectTo: 'agregar-cita'},
  {path: 'agregar-cita', component: AgregarCitaComponent},
  {path: 'editar-cita/:id', component: EditarCitaComponent},
  {path: 'listar-cita', component: ListarCitaComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
