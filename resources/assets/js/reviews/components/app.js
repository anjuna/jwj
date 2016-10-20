import React from 'react';
import BookList from './book-list';
import Header from './header';
import Body from './body';

//will be fetched later


const style = {
    border: "1px dashed black",
    padding: "10px"
}

export default class App extends React.Component {

    constructor(props){
        super(props);

        this.state = {
            books: [],
            currentBook: {},
        }
    }

    componentDidMount(){

        fetch('/json/book.json', {
        	method: 'get'
        }).then(function(response) {
        	return response.json();
        }).then(function (books){
            this.setState({
                books,
                currentBook: books[0]
            });
        }.bind(this)).catch(function(err) {
        	// Error :(
        });
    }

    selectBook(book){
        this.setState({
            currentBook: book
        });
    }

    renderShite(){
        return (
            <div style={style}>
                <Header />
                <Body books={this.state.books} currentBook={this.state.currentBook} selectBook={this.selectBook.bind(this)}/>
            </div>
        );
    }

    render (){
        if (this.state.books.length === 0) {
            return (
                <p>loading</p>
            );
        } else {
            return this.renderShite()
        }
    }
}
