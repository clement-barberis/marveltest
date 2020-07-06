import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Route, Router} from "@angular/router";
import {HeroService} from "../../services/hero.service";
import {first} from "rxjs/operators";
import {Hero} from "../../models/Hero";
import {environment} from "../../../environments/environment";

@Component({
  selector: 'app-hero-description',
  templateUrl: './hero-description.component.html',
  styleUrls: ['./hero-description.component.scss']
})
export class HeroDescriptionComponent implements OnInit {
  hero: Hero
  picUrl: string
  constructor(
    private route: ActivatedRoute,
    private heroService : HeroService
  ) { }

  ngOnInit(): void {
    let id = parseInt(this.route.snapshot.paramMap.get('id'));
    let hero = this.heroService.Get(id)
      .pipe(first())
      .subscribe(
        data => {
          this.hero = data
          this.picUrl = environment.api_url_base + '/pictures/' + this.hero.picture;
          console.log(this.picUrl)

        },
        error => {
          console.log(error);
        });
  }

}
