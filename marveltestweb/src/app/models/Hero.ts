import { Team } from './Team';
import { Power } from './Power';

export class Hero {
  id: number;
  lastname: string;
  firstname: string;
  identity: string;
  picture: string;
  origin: string;
  description: string;
  powers: Array<Power>;
  team: Team;


}
