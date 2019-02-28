package com.company;

public class Word {
    public String word;
    public String meaning;

    public Word(){
    }

    //入力用
    public Word(String input_word, String input_mean){
        this.word =input_word;
        this.meaning =input_mean;
    }

    //出力用:toString
    public String toString() {
        return "単語：" + word + " 意味：" + meaning;
    }



}
