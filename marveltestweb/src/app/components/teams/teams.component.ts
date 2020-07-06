import { Component, OnInit } from '@angular/core';
import {Team} from "../../models/Team";
import {TeamService} from "../../services/team.service";
import {first} from "rxjs/operators";

@Component({
  selector: 'app-teams',
  templateUrl: './teams.component.html',
  styleUrls: ['./teams.component.scss']
})
export class TeamsComponent implements OnInit {

  public teams: Team[]
  constructor(private teamService : TeamService) {
    this.teamService.GetAll()
      .pipe(first())
      .subscribe(
        data => {
          this.teams = data;
          console.log(this.teams)
        },
        error => {
          console.log(error);
        });
  }

  ngOnInit(): void {
  }

}
