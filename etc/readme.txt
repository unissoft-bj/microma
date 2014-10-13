
git config --global user.name ="caiwang"
git config --global user.email ="1151104844@qq.com"

ssh-keygen -C '1151104844@qq.com' -t rsa
cat ~/.ssh/id_rsa.pub

copy&paste public key into github


in /meida/ihostdata/prog

=== git clone ===

git clone git@github.com:unissoft-bj/microhr

git clone git@github.com:unissoft-bj/microma


=== git push ===
git add -A
git commit -m "your message"
git push

=== collision ===
# 强制推送，覆盖远程分支
git push -u origin master -f 

# 手工解决冲突后push
