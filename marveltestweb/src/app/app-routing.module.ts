import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {HomeComponent} from "./components/home/home.component";
import {HeroDescriptionComponent} from "./components/hero-description/hero-description.component";
import {TeamsComponent} from "./components/teams/teams.component";


const routes: Routes = [
  {
    path: 'home',
    component: HomeComponent,
    children: [
      {path: 'teams', component: TeamsComponent},
      {path: 'hero/:id', component: HeroDescriptionComponent },
      {path: '**', redirectTo:'teams', pathMatch:'full'}

    ]
  },
  { path: '**' ,redirectTo: 'home/teams', pathMatch:'full'},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
