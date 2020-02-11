import {Component, OnInit} from '@angular/core';
import {MessageService} from '../../services/message/message.service';
import {MessageType} from './message-type';


@Component({
    selector: 'scrm-message-ui',
    templateUrl: './message.component.html',
    styleUrls: []
})
export class MessageUiComponent implements OnInit {

    messages: Array<MessageType> = [];

    constructor(public messageService: MessageService) {
        messageService.subscribe(this);
    }

    ngOnInit() {
        this.update(this.messageService.messages);
    }

    update(messages: Array<MessageType>) {
        this.messages = messages;
    }

    close(message: MessageType) {
        this.messageService.contains(message, true);
    }

}