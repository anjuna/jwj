import React from 'react';
import BookList from './book-list';


export default class BookInfo extends React.Component {

    render (){
        return (
            <div style={{display:'flex'}}>
                {this.props.book.name}
            </div>
        )
    }
}
