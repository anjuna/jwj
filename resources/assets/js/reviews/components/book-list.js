import React from 'react';
import _ from 'lodash';
import BookListItem from './book-list-item';

const style = {
    backgroundColor: 'mistyrose'
}

export default class BookList extends React.Component {
    renderItems(){
        return _.map(this.props.books, (book) => <BookListItem key={book.id} book={book} />);
    }

    myClick(){
        console.log('hit');
    }

    render (){
        return (
            <div style={style} myClick={this.myClick}>
                {this.renderItems()}
            </div>
        )
    }
}
