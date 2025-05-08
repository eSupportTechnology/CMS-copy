<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowupResource\Pages;
use App\Filament\Resources\FollowupResource\RelationManagers;
use App\Models\Followup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;



class FollowupResource extends Resource
{
    protected static ?string $model = Followup::class;
    protected static ?string $navigationIcon = 'heroicon-o-phone-arrow-up-right';
    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('inquiry_id')
                    ->label('Inquiry')
                    ->relationship('inquiry', 'id')
                    ->preload()
                    ->searchable()
                    ->required(),

                DateTimePicker::make('scheduled_date')
                    ->required()
                    ->label('Scheduled Time'),

                Select::make('call_status')
                    ->options([
                        'answered' => 'Answered',
                        'not_answered' => 'Not Answered',
                        'callback' => 'Call Back Later',
                    ])
                    ->default('callback')
                    ->required(),

                Textarea::make('notes')
                    ->rows(3),

                Select::make('created_by_user_id')
                    ->label('Created By')
                    ->relationship('createdBy', 'name')
                    ->preload()
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('inquiry.id')->label('Inquiry ID'),
                TextColumn::make('call_status')->badge(),
                TextColumn::make('scheduled_date')->label('Follow-up Time')->dateTime(),
                TextColumn::make('createdBy.name')->label('Created By'),
                TextColumn::make('created_at')->label('Created')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFollowups::route('/'),
            'create' => Pages\CreateFollowup::route('/create'),
            'edit' => Pages\EditFollowup::route('/{record}/edit'),
        ];
    }
}
