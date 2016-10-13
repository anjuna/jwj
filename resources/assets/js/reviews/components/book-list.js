import React from 'react';
import _ from 'lodash';
import BookListItem from './book-list-item';

const style = {

}

export default class BookList extends React.Component {
    renderItems(){
        return _.map(this.props.books, (book) => <BookListItem key={book.id} book={book} selectBook={this.props.selectBook} />);
    }

    render (){
        return (
            <div style={style}>
                {this.renderItems()}
            </div>
        )
    }
}
