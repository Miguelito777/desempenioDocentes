import { Component, OnInit } from '@angular/core';
import { LoadingController } from '@ionic/angular';
import { RestApiService } from '../rest-api.service';
import { ActivatedRoute, Router  } from '@angular/router';

@Component({
  selector: 'app-actitudinales',
  templateUrl: './actitudinales.page.html',
  styleUrls: ['./actitudinales.page.scss'],
})
export class ActitudinalesPage implements OnInit {
  public actitudinales;
  public actitudinalesSelect:any=[];
  public actitudinal = {
    aspecto:null,
    nivel:null
  }
  public nuveles : any = [
    {
      id:1,
      nivel:"Necesita Mejorar"
    },
    {
      id:2,
      nivel:"Regular"
    },
    {
      id:3,
      nivel:"Bueno"
    },
    {
      id:4,
      nivel:"Muy Bueno"
    },
    {
      id:5,
      nivel:"Excelente"
    }
  ]
  constructor(
    public api: RestApiService, 
    public loadingController: LoadingController,
    public router: Router
  ) { }

  ngOnInit() {
    this.getActitudinales();
  }
  async getActitudinales() {
    const loading = await this.loadingController.create({
      message: 'Actitudinales',
    });
    await loading.present();
    await this.api.getAspectosActitudinales()
      .subscribe(res => {
        console.log(res);
        this.actitudinales = res;
        loading.dismiss();
      }, err => {
        console.log(err);
        loading.dismiss();
      });
  }
  addActitudinal(){
    this.actitudinalesSelect.push(this.actitudinal);
    var actitudinalDocente = {
      actitudinal_docente: this.actitudinal.nivel.nivel,
      id_aspecto_actitudinal:this.actitudinal.aspecto.id,
      id_docente:1
    }
    this.insActitudinal(actitudinalDocente); 
  }
  async insActitudinal(actitudinalDocente){
    const loading = await this.loadingController.create({
      message: 'Guardando Actitudianl ',
    });
    await loading.present();
    await this.api.insActitudinalDocente(actitudinalDocente)
    .subscribe(res => {
      console.log(res);
      loading.dismiss();  
      //let id = res['id'];
        //this.router.navigate(['/Catalogos']);
      }, (err) => {
        console.log(err);
      });
  }
}
