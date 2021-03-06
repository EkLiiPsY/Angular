import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {RegisterComponent} from './register/register.component';
import {PPComponent} from './pp/pp.component';
import {LoginComponent} from './login/login.component';
import {UploadFilesComponent} from './upload-files/upload-files.component';
import {ProfileComponent} from './profile/profile.component';
import {ClassComponent} from "./feedDisplay/class/class.component";
import {NotFoundComponent} from "./feedDisplay/not-found/not-found.component";

const routes: Routes = [
  {path: '', component: PPComponent},
  {path: 'register', component: RegisterComponent},
  {path: 'login', component: LoginComponent},
  {path: 'uploadFiles/:username', component: UploadFilesComponent},
  {path: 'profile/:username', component: ProfileComponent},
  {path: ':class', component: ClassComponent},
	{path: '**',component:NotFoundComponent},



];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
