import {Injectable} from '@angular/core';
import {BehaviorSubject, Observable} from 'rxjs';
import {HttpClient} from '@angular/common/http';
import {map} from 'rxjs/operators';
import {environment} from '../../environments/environment';
import { Hero } from '../models/Hero';

// @ts-ignore
@Injectable({providedIn: 'root'})
export class HeroService {
  constructor(private http: HttpClient) {
  }

  GetAll() {
    return this.http.get<Hero[]>(`${environment.api_url_base}/api/heroes`)
      .pipe(map(heroes => {
        return heroes;
      }));
  }



  Get(id){
    return this.http.get<Hero>(`${environment.api_url_base}/api/heroes/${id}`)
      .pipe(map(hero => {
        return hero;
      }));
  }






}
