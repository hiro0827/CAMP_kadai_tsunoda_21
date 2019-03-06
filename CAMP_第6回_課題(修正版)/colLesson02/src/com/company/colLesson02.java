package com.company;

import java.util.Scanner;

public class colLesson02 {
    public static void main(String[] args) {

        System.out.println("わからなかった単語と意味をスペースで区切って入力して下さい。");

        //データ登録用の配列
        Word[] data =new Word[10];

        //while用
        int i = 0;

        //単語と意味の入力*配列数
        do {
            Scanner sc = new Scanner(System.in);
            String input_word =sc.next();

//            String[] dict =sc.split(" ");
//
//            String input_word ="";
//            String input_mean ="";

            if(input_word.contains("e")){
                break;
            }

            String input_mean =sc.next();

            System.out.println("次の単語と意味を入力して下さい。eで終了します。");

            data[i] =new Word(input_word, input_mean);

        } while (i < data.length);{
            i++;
        }

        //登録情報の出力

        //カウント用の変数
        int j =0;
        Word dis =new Word(data[j].word, data[j].meaning);

        //forループ　-> disが上書きされている
        for(int k =0; k < i; k++){
            System.out.println(dis);
            j++;
        }
        System.out.println(i + "件、登録しました。");
    }

}