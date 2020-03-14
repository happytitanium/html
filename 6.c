#include <stdio.h>
#include <math.h>
int main(void){
  int a,sum=0,x;
  float z;
  scanf("%d",&a);
  for(int i=0;i<a;i++){
      for(int j=0;j<a;j++){
          scanf("%d",&x);
          sum+=x*x;
      }
  }
  z=sqrt(sum);
  printf("%.2f",z);
    
}