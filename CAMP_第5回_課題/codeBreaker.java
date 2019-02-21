import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;

public class codeBreaker {
    public static void main(String[] args){

//タイトル、ゲームルールを変数に格納
String title = "***CodeBreaker***\n"; //タイトル
String rule = "隠された3つの数字を当てるゲームです。\n" +
        "1つの数字は1から6の間です。\n" +
        "3つの答えの中に同じ数字はありません。\n\n" +
        "・ヒット：数字、数字の位置共に正しい\n" +
        "・ブロウ：数字は正しいが、位置が間違っている\n" +
        "3つの数字が「ヒット」になればゲームクリアです。\n";

//入力した数字を格納する配列
int[] answer =new int[3]; //答えを入れる
int[] input =new int[3]; //入力した数字を入れる

//使用する変数の初期化
//hitはヒット、blowはブロウ、countはチャレンジ回数
int hit=0, blow=0, count=0;

//タイトル、ゲームルールの出力
BufferedReader br
=new BufferedReader(new InputStreamReader(System.in));

System.out.println(title);
System.out.println(rule);

//ランダムで答えを設定
//答えの数字は重複させない
for(int i=0; i <answer.length; i++){
    boolean flag =false;
    answer[i] =(int)(Math.random()*6+1);

        do {
            flag = false;
            for (int j = i - 1; j >= 0; j--) {
                if (answer[i] == answer[j]) {
                    flag = true;
                    answer[i] = (int) (Math.random() * 6 + 1);
                }
                }
            }while(flag);
}

//ゲーム部分
while(true){
    count++;
    System.out.println("***" + count + "回目" + "***\n");
    //インプット
    for(int i=0; i<answer.length; i++){
        System.out.println((i+1) + "個目の数字は？");
        try{
            input[i] = Integer.parseInt(br.readLine());
        }catch (NumberFormatException e){
            System.out.println("数値を入力してください");
            i--;
        }catch (IOException e){
            System.out.println("もう一度入力してください");
            i--;
        }
    }

//答えの判定
    hit =0;
    blow =0;

    for(int i=0; i<answer.length; i++){
        for(int j=0; j<answer.length; j++){
            if(i == j && input[i] == answer[j]){
                hit++;
            }else if(input[i] != answer[j]){
                blow++;
            }
        }
    }

//終了判定 HIT3つでクリア
    System.out.println("ヒット" + hit + "ブロー" + blow);
    if(hit == 3){
        System.out.println("ゲームクリア！");
        break;
    }else{
        System.out.println();
    }
}

}

}
