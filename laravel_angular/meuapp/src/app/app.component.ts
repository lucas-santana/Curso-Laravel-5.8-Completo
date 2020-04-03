import { Component } from '@angular/core';
import {Post} from './post';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'meuapp';

  private posts: Post[]= [
    new Post("João", "Meu post", "Sub joão", "joao@gmail.com","Minha msg"),
    new Post("Paulo", "Post do Paulo", "Sub paulo", "paulo@gmail.com","Msg paulo"),
    new Post("Maria", "Post da Maria", "Sub Maria", "maria@gmail.com","Msg da maria"),
    new Post("João", "Meu post", "Sub joão", "joao@gmail.com","Minha msg"),
    new Post("Paulo", "Post do Paulo", "Sub paulo", "paulo@gmail.com","Msg paulo"),
    new Post("Maria", "Post da Maria", "Sub Maria", "maia@gmail.com","Msg da maria")
  ]
}
