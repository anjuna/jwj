import React from 'react';
import BookList from './book-list';
import BookInfo from './book-info';

const style = {
    display:'flex'
}

export default class Body extends React.Component {

    render (){
        console.log(this.props.currentBook);
        return (
            <div style={style}>
                <BookList books={this.props.books} selectBook={this.props.selectBook}/>
                <BookInfo book={this.props.currentBook}/>
            </div>
        )
    }
}
