import {Component, OnInit, Input} from '@angular/core';

@Component({
  selector: 'scrm-button-ui',
  templateUrl: 'button.component.html',

})

export class ButtonUiComponent implements OnInit {

  @Input() buttonConfig: any;
  constructor() {}

  ngOnInit() {

  }

}