/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package text;


import java.util.*; 
import java.io.*; 
import java.util.logging.Level;
import java.util.logging.Logger;

class Sentenses { 

public static void main(String [ ] args) { 
String word1 = null;
String word;
Scanner s = null; 
Scanner s1=null;
try { 
s = new Scanner (new File("C:\\Users\\u313bca039\\Documents\\NetBeansProjects\\JavaApplication1\\src\\text\\file.txt")); 
}catch(IOException e) { 
System.err.println("Error opening file"); 
System.exit(1); 
} 
Scanner s321=s;
int sentenceNum=0; 
int numWords = 0; 
int minLength=0; 
int maxLength=0; 
int minSentenceNum=0; 
int maxSentenceNum=0; 

//process the first sentence 
while(s.hasNext()) { 
word = s.next(); 
numWords++; 
if(word.charAt(word.length()-1)=='.') { 
minLength = numWords; 
maxLength=numWords; 
minSentenceNum = 1; 
maxSentenceNum=1; 
sentenceNum++; 
numWords = 0; 
break; 
} 
} 

//process everything else 
String [] word2 = new String[50];
String [] word3 = new String[50];
String [] word4 = new String[50];
String word5=null;
while(s.hasNext()) { 

word = s.next();
word2[numWords]=word;
numWords++; 
if(word.charAt(word.length()-1)=='.') { 
if (numWords < minLength) { 
minLength = numWords; 
minSentenceNum = sentenceNum; 
} 
if(numWords > maxLength) { 
maxLength = numWords; 
word1=word;
word3=word2;
maxSentenceNum = sentenceNum; 
} 
sentenceNum++; 
numWords = 0; 
} 
} 

System.out.println("The longest sentence was sentence number " + maxSentenceNum + " with " + maxLength + " words."); 

for(int i=0;i<maxLength;i++)
{
    System.out.print(word3[i]+" ");
}

System.out.println("\n");

/*for(int i=0;i<maxLength;i++)
{
   // System.out.print(word3[i]+" ");
    if(word3[i].equals("by")||word3[i].equals("of")||word3[i].equals("at")||word3[i].equals("in"))
    {
           int x=i+1;
           System.out.println(word3[x]);
    }
}*/


numWords=0;
while(s321.hasNext()) { 
word = s321.next();
word2[numWords] = word; 
if(word.charAt(word.length()-1)=='.') { 
if(word2[numWords].equals("by")||word2[numWords].equals("of")||word2[numWords].equals("at")||word2[numWords].equals("in"))
    {
           int x=numWords+1;
           System.out.println(word2[x]);
    }
} 
numWords++;
} 
} 

}
