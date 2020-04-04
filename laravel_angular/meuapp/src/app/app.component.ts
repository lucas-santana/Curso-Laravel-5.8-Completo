import { PostService } from './post.service';
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

  public posts: Post[];

  constructor (public dialog: MatDialog, public postService:PostService){

  }

  ngOnInit(){
    this.posts = this.postService.posts;
  }
  openDialog(){
    const dialogRef = this.dialog.open(PostDialogComponent,{
      width:'600px'
    });

    dialogRef.afterClosed().subscribe(
      (result)=>{
        if(result){
            this.postService.salvar(result.post,result.arquivo)

        }
      }
    );
  }
}
