package com.company;

public class Word {
    public String word;
    public String meaning;

    public Word(){
        System.out.println("わからなかった単語と意味をスペースで区切って入力して下さい。");
    }

    public Word(String input_word, String input_mean){
        this.word =input_word;
        this.meaning =input_mean;

    }

//出力用
//    public void display() {
//        System.out.println("単語：" + this.word + " 意味：" + this.meaning);
//
//    }

}
