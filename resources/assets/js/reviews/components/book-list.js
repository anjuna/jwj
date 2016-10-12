import React from 'react';
import _ from 'lodash';
import BookListItem from './book-list-item';


export default class BookList extends React.Component {
    renderItems(){
        return _.map(this.props.books, (book) => <BookListItem key={book.id} book={book} />);
    }

    render (){
        return (
            <div>
                {this.renderItems()}
            </div>
        )
    }
}
