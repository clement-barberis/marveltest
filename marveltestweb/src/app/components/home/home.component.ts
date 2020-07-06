import { Component, OnInit } from '@angular/core';
import {Team} from "../../models/Team";
import {TeamService} from "../../services/team.service";
import {first} from "rxjs/operators";

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  constructor() {
  }

  ngOnInit(): void {
  }

}
