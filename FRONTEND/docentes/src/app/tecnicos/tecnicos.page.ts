import { Component, OnInit } from '@angular/core';
import { LoadingController } from '@ionic/angular';
import { RestApiService } from '../rest-api.service';
import { ActivatedRoute, Router  } from '@angular/router';

@Component({
  selector: 'app-tecnicos',
  templateUrl: './tecnicos.page.html',
  styleUrls: ['./tecnicos.page.scss'],
})
export class TecnicosPage implements OnInit {
  public aspectosTecnicos;
  public tecnica:any={
    estrategica:null,
    tecnica:null,
    metodo:null
  };
  public estrategica:any=[];
  public tecnicaArray:any=[];
  public metodo:any=[];
  constructor(
    public api: RestApiService, 
    public loadingController: LoadingController,
    public router: Router
  ) { }

  ngOnInit() {
    this.getAspectosTecnicos();
  }
  async getAspectosTecnicos() {
    const loading = await this.loadingController.create({
      message: 'Aspectos Tecnicos',
    });
    await loading.present();
    await this.api.getAspectosTecnicos()
      .subscribe(res => {
        this.aspectosTecnicos = res;
        /*for(var i in res){
          if(res[i].id_tipo_acpecto_tecnico == 1){
            this.estrategias.push(res[i]);
          }else if(res[i].id_tipo_acpecto_tecnico == 2){
            this.tecnicas.push(res[i]);
          }else{
            this.metodos.push(res[i]);
          }
        };*/
        loading.dismiss();
      }, err => {
        console.log(err);
        loading.dismiss();
      });
  }
  public addEstrategia(){
    this.estrategica.push(this.tecnica.estrategica);
  }
  public addTecnica(){
    this.tecnicaArray.push(this.tecnica.tecnica);
  }
  public addMetodo(){
    this.metodo.push(this.tecnica.metodo);
  }
  saveTecnico(){
    console.log(this.estrategica);
  }
}
