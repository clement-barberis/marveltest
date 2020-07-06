import {Injectable} from '@angular/core';
import {BehaviorSubject, Observable} from 'rxjs';
import {HttpClient} from '@angular/common/http';
import {map} from 'rxjs/operators';
import {environment} from '../../environments/environment';
import { Team } from '../models/Team';

// @ts-ignore
@Injectable({providedIn: 'root'})
export class TeamService {
  constructor(private http: HttpClient) {
  }

  GetAll() {
    return this.http.get<Team[]>(`${environment.api_url_base}/api/teams`)
      .pipe(map(teams => {
        return teams;
      }));
  }



  Get(id){
    return this.http.get<Team>(`${environment.api_url_base}/api/teams/${id}`)
      .pipe(map(team => {
        return team;
      }));
  }






}
