import { Component } from '@angular/core';
import {Post} from './post';
import {MatDialog} from '@angular/material/dialog';
import {PostDialogComponent} from './post-dialog/post-dialog.component';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'meuapp';

  posts: Post[]= [
    new Post("João", "Meu post", "Sub joão", "joao@gmail.com","Minha msg"),
    new Post("Paulo", "Post do Paulo", "Sub paulo", "paulo@gmail.com","Msg paulo"),
    new Post("Maria", "Post da Maria", "Sub Maria", "maria@gmail.com","Msg da maria"),
    new Post("João", "Meu post", "Sub joão", "joao@gmail.com","Minha msg"),
    new Post("Paulo", "Post do Paulo", "Sub paulo", "paulo@gmail.com","Msg paulo"),
    new Post("Maria", "Post da Maria", "Sub Maria", "maia@gmail.com","Msg da maria")
  ];

  constructor (public dialog: MatDialog){

  }
  openDialog(){
    const dialogRef = this.dialog.open(PostDialogComponent,{
      width:'600px'
    });

    dialogRef.afterClosed().subscribe(
      (result)=>{
        if(result){
          console.log(result);

        }
      }
    );
  }
}
