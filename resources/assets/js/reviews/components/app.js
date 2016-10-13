import React from 'react';
import BookList from './book-list';
import Header from './header';
import Body from './body';

//will be fetched later
const books = [
    {"id":1,"name":"Anna Karennina","author":"Leo Tolstoy","reviews":[{"id":3,"reviewable_id":1,"reviewable_type":"App\\Book","body":"Awesome book, feels like you live several lives","created_at":"2016-10-11 14:39:29","updated_at":"2016-10-11 14:39:29"}]},
];

const style = {
    border: "1px dashed black",
    padding: "10px"
}

export default class App extends React.Component {

    constructor(props){
        super(props);

        this.state = {
            currentBook: books[0],
        }
    }

    componentDidMount(){
        this.fetchData();
    }

    fetchData(){
        // var xhr = new XMLHttpRequest();
        // xhr.open('GET', '/json/books.json');
        // xhr.onload = function() {
        //     if (xhr.status === 200) {
        //         this.setState({
        //             books: xhr.responseText
        //         });
        //         console.log('ol');
        //         return;
        //     } else {
        //         console.log('failed');
        //     }
        // }.bind(this);
        // xhr.send();
        $.get('/json/books.json', function (data){
            console.log(data);
            this.setState({
                books: data
            });
        }.bind(this));
    }

    selectBook(book){
        this.setState({
            currentBook: book
        });
    }

    renderShite(){
        this.fetchData();
        return (
            <div>
                <Header />
                <Body books={books} currentBook={this.state.currentBook} selectBook={this.selectBook.bind(this)}/>
            </div>
        );
    }

    render (){
        return (
            <div style={style}>
                {this.renderShite()}
            </div>
        )
    }
}
