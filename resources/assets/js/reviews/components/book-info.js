import React from 'react';
import BookList from './book-list';

const style = {
    padding: '10px'
}

export default class BookInfo extends React.Component {

    render (){
        return (
            <div style={style}>
                <h3>{this.props.book.name}</h3>
                <p>{this.props.book.reviews[0].body}</p>
            </div>
        );
    }
}
