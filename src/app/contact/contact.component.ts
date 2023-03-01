import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.scss']
})
export class ContactComponent {
  contact: FormGroup;

  constructor(private fb: FormBuilder) {
    this.contact = this.fb.group({
      name: ['', [Validators.required, Validators.minLength(3)]], // the same shit like in the html element
      mail: ['', [Validators.required, Validators.email]], // the same shit like in the html element
      message: ['', [Validators.required, Validators.minLength(10)]] // the same shit like in the html element
    });
  }

  sendMail() {

  }

}
