import { PostService } from './../post.service';
import { Component, OnInit,Input } from '@angular/core';
import {Post} from '../post';
@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent implements OnInit {

  @Input() post: Post;

  constructor(public postService: PostService ) { }

  ngOnInit(): void {
  }

  like(){
    this.postService.like(this.post.id);
  }

  apagar(){
    this.postService.apagar(this.post.id);

  }

}
