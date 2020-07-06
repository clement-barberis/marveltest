import {Component, Input, OnInit} from '@angular/core';
import {Hero} from "../../models/Hero";
import {Router} from "@angular/router";
import {environment} from "../../../environments/environment";

@Component({
  selector: 'app-hero-card',
  templateUrl: './hero-card.component.html',
  styleUrls: ['./hero-card.component.scss']
})
export class HeroCardComponent implements OnInit {
  @Input()
  hero: Hero
  picUrl: string
  constructor(private router: Router) { }

  ngOnInit(): void {
    this.picUrl = environment.api_url_base + '/pictures/' + this.hero.picture;

  }

  click(){
    this.router.navigate(['home/hero', this.hero.id]);
  }

}
