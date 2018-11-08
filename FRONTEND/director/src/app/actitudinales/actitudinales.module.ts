import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { ActitudinalesPage } from './actitudinales.page';

const routes: Routes = [
  {
    path: '',
    component: ActitudinalesPage
  }
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RouterModule.forChild(routes)
  ],
  declarations: [ActitudinalesPage]
})
export class ActitudinalesPageModule {}
