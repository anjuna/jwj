import React from 'react';
import BookList from './book-list';

const style = {
    padding: '10px'
}

export default class BookInfo extends React.Component {

    printReviews(){
        return this.props.reviews.forEach((review) => {
            return (
                <p>{review.body}</p>
            );
        });
    }

    render (){
        return (
            <div style={style}>
                <h3>{this.props.book.title}</h3>
                {this.printReviews()}
            </div>
        );
    }
}

/*for (var review in this.props.book.reviews) {
    <p>{review.body}</p>
}*/
